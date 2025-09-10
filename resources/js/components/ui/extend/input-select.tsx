"use client"

import * as React from "react"
import { Check, ChevronsUpDown } from "lucide-react"

import { cn } from "@/lib/utils"
import { Button } from "@/components/ui/button"
import {
  Command,
  CommandEmpty,
  CommandGroup,
  CommandInput,
  CommandItem,
  CommandList,
} from "@/components/ui/command"
import {
  Popover,
  PopoverContent,
  PopoverTrigger,
} from "@/components/ui/popover"

export interface InputSelectOption {
  label: string
  value: string
}

export interface InputSelectProps {
  options: InputSelectOption[]
  value?: string
  onValueChange?: (value: string) => void
  placeholder?: string
  searchPlaceholder?: string
  emptyMessage?: string
  disabled?: boolean
  className?: string
  buttonClassName?: string
  contentClassName?: string
  width?: string
  name?: string
  defaultValue?: string
}

const InputSelect = React.forwardRef<
  React.ElementRef<typeof PopoverTrigger>,
  InputSelectProps
>(({
  options,
  value,
  onValueChange,
  placeholder = "Select option...",
  searchPlaceholder = "Search options...",
  emptyMessage = "No option found.",
  disabled = false,
  className,
  buttonClassName,
  contentClassName,
  width = "w-[200px]",
  name,
  defaultValue,
  ...props
}, ref) => {
  const [open, setOpen] = React.useState(false)
  const [internalValue, setInternalValue] = React.useState(value || defaultValue || "")
  const hiddenInputRef = React.useRef<HTMLInputElement>(null)

  // Sync internal value with external value
  React.useEffect(() => {
    setInternalValue(value || defaultValue || "")
  }, [value, defaultValue])

  const selectedOption = React.useMemo(
    () => options.find((option) => option.value === internalValue),
    [options, internalValue]
  )

  const handleSelect = React.useCallback(
    (selectedValue: string) => {
      const newValue = selectedValue === internalValue ? "" : selectedValue
      setInternalValue(newValue)
      onValueChange?.(newValue)

      // Update hidden input for form submission
      if (hiddenInputRef.current) {
        hiddenInputRef.current.value = newValue
      }

      setOpen(false)
    },
    [internalValue, onValueChange]
  )

  return (
    <div className={cn("relative", className)}>
      {/* Hidden input for form submission */}
      {name && (
        <input
          ref={hiddenInputRef}
          type="hidden"
          name={name}
          defaultValue={internalValue}
        />
      )}

      <Popover open={open} onOpenChange={setOpen}>
        <PopoverTrigger asChild>
          <Button
            ref={ref}
            variant="outline"
            role="combobox"
            aria-expanded={open}
            disabled={disabled}
            className={cn(
              width,
              "justify-between",
              buttonClassName
            )}
            {...props}
          >
            <span className="truncate">
              {selectedOption ? selectedOption.label : placeholder}
            </span>
            <ChevronsUpDown className="ml-2 h-4 w-4 shrink-0 opacity-50" />
          </Button>
        </PopoverTrigger>
        <PopoverContent className={cn(width, "p-0", contentClassName)}>
          <Command>
            <CommandInput
              placeholder={searchPlaceholder}
              className="h-9"
            />
            <CommandList>
              <CommandEmpty>{emptyMessage}</CommandEmpty>
              <CommandGroup>
                {options.map((option) => (
                  <CommandItem
                    key={option.value}
                    value={option.label}
                    onSelect={() => handleSelect(option.value)}
                    className="cursor-pointer"
                  >
                    <span className="truncate">{option.label}</span>
                    <Check
                      className={cn(
                        "ml-auto h-4 w-4",
                        internalValue === option.value ? "opacity-100" : "opacity-0"
                      )}
                    />
                  </CommandItem>
                ))}
              </CommandGroup>
            </CommandList>
          </Command>
        </PopoverContent>
      </Popover>
    </div>
  )
})

InputSelect.displayName = "InputSelect"

export { InputSelect }
