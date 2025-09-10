import React from "react"
import { InputSelect, type InputSelectOption } from "@/components/ui/extend/input-select"

// Example usage of InputSelect component

const ExampleUsage = () => {
  const [selectedValue, setSelectedValue] = React.useState<string>("")

  // Example date format options (as shown in your original code)
  const dateFormatOptions: InputSelectOption[] = [
    { label: "MM/DD/YYYY", value: "MM/DD/YYYY" },
    { label: "DD/MM/YYYY", value: "DD/MM/YYYY" },
    { label: "YYYY-MM-DD", value: "YYYY-MM-DD" },
    { label: "DD-MM-YYYY", value: "DD-MM-YYYY" },
    { label: "MM-DD-YYYY", value: "MM-DD-YYYY" },
  ]

  return (
    <div className="p-4 space-y-4">
      <h2 className="text-lg font-semibold">InputSelect Component Examples</h2>

      {/* Basic usage */}
      <div>
        <label className="block text-sm font-medium mb-2">
          Select Date Format:
        </label>
        <InputSelect
          options={dateFormatOptions}
          value={selectedValue}
          onValueChange={setSelectedValue}
          placeholder="Select date format..."
          searchPlaceholder="Search date formats..."
          emptyMessage="No date format found."
        />
        <p className="text-sm text-muted-foreground mt-1">
          Selected: {selectedValue || "None"}
        </p>
      </div>

      {/* Custom width */}
      <div>
        <label className="block text-sm font-medium mb-2">
          Custom Width (300px):
        </label>
        <InputSelect
          options={dateFormatOptions}
          value={selectedValue}
          onValueChange={setSelectedValue}
          placeholder="Select date format..."
          width="w-[300px]"
        />
      </div>

      {/* Disabled state */}
      <div>
        <label className="block text-sm font-medium mb-2">
          Disabled:
        </label>
        <InputSelect
          options={dateFormatOptions}
          value={selectedValue}
          onValueChange={setSelectedValue}
          placeholder="Select date format..."
          disabled
        />
      </div>
    </div>
  )
}

export default ExampleUsage
