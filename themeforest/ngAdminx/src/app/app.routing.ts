import { Routes, RouterModule } from '@angular/router';
import { ModuleWithProviders } from '@angular/core';

import { SignInComponent } from './authentication/sign-in/sign-in.component';
import { SignUpComponent } from './authentication/sign-up/sign-up.component';
import { ForgotPasswordComponent } from './authentication/forgot-password/forgot-password.component';
import { Page404Component } from './authentication/page-404/page-404.component';
import { Page500Component } from './authentication/page-500/page-500.component';
import { PageOfflineComponent } from './authentication/page-offline/page-offline.component';
import { LockedScreenComponent } from './authentication/locked-screen/locked-screen.component';

export const routes: Routes = [
    { path: '', redirectTo: 'admin', pathMatch:'full' },
    { path: 'admin', loadChildren: 'app/admin/admin.module#AdminModule' }   ,
    { path: 'sign-in', component: SignInComponent },
    { path: 'sign-up', component: SignUpComponent },
    { path: 'forgot-password', component: ForgotPasswordComponent },
    { path: '404', component: Page404Component },
    { path: '500', component: Page500Component },
    { path: 'offline', component: PageOfflineComponent },
    { path: 'locked-screen', component: LockedScreenComponent },
];

export const routing: ModuleWithProviders = RouterModule.forRoot(routes, { useHash: false });