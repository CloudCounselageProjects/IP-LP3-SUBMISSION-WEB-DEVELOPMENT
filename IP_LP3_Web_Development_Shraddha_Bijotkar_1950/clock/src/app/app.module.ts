import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { HttpClientModule } from '@angular/common/http';
import { AppComponent } from './app.component';
import { ApisService } from './apis.service';
import { MatToolbarModule } from '@angular/material/toolbar';
import {MatCardModule } from '@angular/material/card';
import {MatButtonModule } from '@angular/material/button';
import { MatIconModule } from '@angular/material/icon';
  import { from } from 'rxjs';
  @NgModule({
  declarations: [
    AppComponent
  ],
  imports: [
    BrowserModule,
    HttpClientModule,
    MatToolbarModule,
    MatCardModule,
    MatButtonModule,
    MatIconModule
  ],
  providers: [ApisService],
  bootstrap: [AppComponent]
})
export class AppModule { }
