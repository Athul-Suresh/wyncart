import { InertiaLinkProps } from '@inertiajs/react';
import { LucideIcon } from 'lucide-react';
import { Dispatch, SetStateAction } from "react";

export interface BreadcrumbItem {
    title: string;
    href: string;
}

export interface NavGroup {
    title: string;
    items: NavItem[];
}

export interface NavItem {
    title: string;
    href: NonNullable<InertiaLinkProps['href']>;
    icon?: LucideIcon | null;
    isActive?: boolean;
}


export type SetState<T> = Dispatch<SetStateAction<T>>;

export type SelectOption = {
  value: string;
  label: string;
  icon?: React.ComponentType<{ className?: string }>;
};
