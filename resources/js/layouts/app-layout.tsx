import { Toaster } from '@/components/ui/sonner';
import AppLayoutTemplate from '@/layouts/app/app-sidebar-layout';
import { type BreadcrumbItem } from '@/types';
import { PageProps } from '@/types/globals';
import React, { type ReactNode } from 'react';
import { toast } from 'sonner';

type AppLayoutProps = PageProps<{
    children: ReactNode;
    breadcrumbs?: BreadcrumbItem[];
}>;

export default ({ children, breadcrumbs, ...props }: AppLayoutProps) => {
     React.useEffect(() => {
        if (props.toast?.type) {
            toast[props.toast.type](props.toast.title, {
                description: props.toast.description,
                duration: props.toast.duration ?? 5000,
            });
        }
    }, [props.toast]);
    return (
        <>
      <Toaster position="top-right" />
            <AppLayoutTemplate breadcrumbs={breadcrumbs} {...props}>
                {children}
            </AppLayoutTemplate>

        </>
    );
};
