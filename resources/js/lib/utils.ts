import { type ClassValue, clsx } from 'clsx';
import { twMerge } from 'tailwind-merge';

export function cn(...inputs: ClassValue[]) {
    return twMerge(clsx(inputs));
}

export const DATE_FORMATS: Array<{ value: string; label: string }> = [
    { value: 'd-m-Y', label: 'd-m-Y (31-12-2025)' },
    { value: 'Y-m-d', label: 'Y-m-d (2025-12-31)' },
    { value: 'd/m/Y', label: 'd/m/Y (31/12/2025)' },
    { value: 'm-d-Y', label: 'm-d-Y (12-31-2025)' },
    { value: 'F j, Y', label: 'F j, Y (December 31, 2025)' },
    { value: 'j F Y', label: 'j F Y (31 December 2025)' },
];

export const TIME_FORMATS: Array<{ value: string; label: string }> = [
    { value: 'H:i', label: 'H:i (14:30)' },
    { value: 'h:i A', label: 'h:i A (02:30 PM)' },
    { value: 'h:i a', label: 'h:i a (02:30 pm)' },
    { value: 'H:i:s', label: 'H:i:s (14:30:00)' },
    { value: 'h:i:s A', label: 'h:i:s A (02:30:00 PM)' },
    { value: 'h:i:s a', label: 'h:i:s a (02:30:00 pm)' },
];

export const TIMEZONES = Intl.supportedValuesOf('timeZone').map(tz => ({ value: tz, label: tz }));

export const CURRENCIES: Array<{ value: string; label: string }> = [
    { value: 'INR', label: 'Indian Rupee' },
    { value: 'USD', label: 'US Dollar' },
    { value: 'EUR', label: 'Euro' },
];

export const CURRENCY_SYMBOLS: { [key: string]: string } = {
    INR: '₹',
    USD: '$',
    EUR: '€',
    GBP: '£',
    JPY: '¥',
    AUD: 'A$',
    CAD: 'C$',
    CHF: 'CHF',
    CNY: '¥',
    SEK: 'kr',
    NZD: 'NZ$',
    MXN: '$',
    SGD: 'S$'
};
