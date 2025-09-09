declare namespace App.Data.Auth {
    export type InertiaAuthData = {
        user: App.Data.Auth.UserData | null;
    };
    export type SessionData = {
        ipAddress: string;
        isCurrentDevice: boolean;
        device: App.Data.Auth.UserAgentData;
        lastActive: string;
    };
    export type UserAgentData = {
        browser: string;
        desktop: boolean;
        mobile: boolean;
        tablet: boolean;
        platform: string;
    };
    export type UserData = {
        id: string | null;
        name: string;
        email: string;
        phone: string;
        username: string | null;
        device_token: string | null;
        web_token: string | null;
        password: string;
        status: number;
        country_code: string | null;
        is_guest: boolean;
        balance: number | null;
        creator_type: string | null;
        creator_id: string | null;
        editor_type: string | null;
        editor_id: string | null;
    };
}
declare namespace App.Data.Settings {
    export type CompanySettings = {
        company_name: string | null;
        company_email: string | null;
        company_calling_code: string | null;
        company_phone: string | null;
        company_website: string | null;
        company_city: string | null;
        company_state: string | null;
        company_country_code: string | null;
        company_zip_code: string | null;
        company_latitude: number | null;
        company_longitude: number | null;
        company_address: string | null;
    };
}
declare namespace App.Data.Shared {
    export type SharedInertiaData = {
        name: string;
        quote: Array<any>;
        auth: App.Data.Auth.InertiaAuthData | null;
        sidebarOpen: boolean;
        toast: App.Data.Shared.ToastData | null;
        translations: Record<string, string>;
        errors: { [key: string]: string } | null;
    };
    export type ToastData = {
        type: App.Enums.Shared.ToastType;
        title: string;
        description: string | null;
        duration: number | null;
    };
}
declare namespace App.Enums {
    export type RoleEnum = 1 | 2 | 3 | 4 | 5;
    export type StatusEnum = 1 | 2;
}
declare namespace App.Enums.Shared {
    export type ToastType = 'error' | 'warning' | 'success' | 'info';
}
