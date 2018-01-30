import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { routing } from './admin.routing';
import { AdminComponent } from './admin/admin.component';

import { DashboardComponent } from '../dashboard/dashboard.component';
import { BasicFormElementsComponent } from '../user-interface/basic-form-elements/basic-form-elements.component';
import { BasicComponent } from '../user-interface/basic/basic.component';
import { TypographyComponent } from '../user-interface/typography/typography.component';
import { HelperClassesComponent } from '../user-interface/helper-classes/helper-classes.component';
import { AlertsComponent } from '../user-interface/alerts/alerts.component';
import { AnimationsComponent } from '../user-interface/animations/animations.component';
import { BreadcrumbsComponent } from '../user-interface/breadcrumbs/breadcrumbs.component';
import { ButtonsComponent } from '../user-interface/buttons/buttons.component';
import { CollapseComponent } from '../user-interface/collapse/collapse.component';
import { DialogsComponent } from '../user-interface/dialogs/dialogs.component';
import { LabelsComponent } from '../user-interface/labels/labels.component';
import { ListGroupComponent } from '../user-interface/list-group/list-group.component';
import { MediaObjectComponent } from '../user-interface/media-object/media-object.component';
import { ModalsComponent } from '../user-interface/modals/modals.component';
import { NotificationsComponent } from '../user-interface/notifications/notifications.component';
import { PaginationComponent } from '../user-interface/pagination/pagination.component';
import { PreloadersComponent } from '../user-interface/preloaders/preloaders.component';
import { ProgressBarsComponent } from '../user-interface/progress-bars/progress-bars.component';
import { SortableNestableComponent } from '../user-interface/sortable-nestable/sortable-nestable.component';
import { TabsComponent } from '../user-interface/tabs/tabs.component';
import { ThumbnailsComponent } from '../user-interface/thumbnails/thumbnails.component';
import { TooltipsPopoversComponent } from '../user-interface/tooltips-popovers/tooltips-popovers.component';
import { WavesComponent } from '../user-interface/waves/waves.component';

@NgModule({
  imports: [
    CommonModule,
    routing
  ],
  declarations: [
    AdminComponent,
    DashboardComponent,
    BasicFormElementsComponent,
    BasicComponent,
    TypographyComponent,
    HelperClassesComponent,
    AlertsComponent,
    AnimationsComponent,
    BreadcrumbsComponent,
    ButtonsComponent,
    CollapseComponent,
    DialogsComponent,
    LabelsComponent,
    ListGroupComponent,
    MediaObjectComponent,
    ModalsComponent,
    NotificationsComponent,
    PaginationComponent,
    PreloadersComponent,
    ProgressBarsComponent,    
    SortableNestableComponent,
    TabsComponent,
    ThumbnailsComponent,
    TooltipsPopoversComponent,
    WavesComponent],
    exports:[AdminComponent]
})
export class AdminModule { }
