import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { routing } from './app.routing';
import { AdminModule } from './admin/admin.module';
import { AppComponent } from './app.component';

import { SignInComponent } from './authentication/sign-in/sign-in.component';
import { SignUpComponent } from './authentication/sign-up/sign-up.component';
import { ForgotPasswordComponent } from './authentication/forgot-password/forgot-password.component';
import { Page404Component } from './authentication/page-404/page-404.component';
import { Page500Component } from './authentication/page-500/page-500.component';
import { PageOfflineComponent } from './authentication/page-offline/page-offline.component';
import { LockedScreenComponent } from './authentication/locked-screen/locked-screen.component';


@NgModule({
  declarations: [
    AppComponent,    
    SignInComponent,
    SignUpComponent,
    ForgotPasswordComponent,
    Page404Component,
    Page500Component,
    PageOfflineComponent,
    LockedScreenComponent    
  ],
  imports: [
      BrowserModule,
      routing,
      AdminModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
