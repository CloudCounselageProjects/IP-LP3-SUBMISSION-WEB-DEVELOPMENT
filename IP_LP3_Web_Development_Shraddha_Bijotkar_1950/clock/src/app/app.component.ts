import { Component } from '@angular/core';
import { ApisService } from './apis.service'
import { HttpClient } from '@angular/common/http';
@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  constructor(private apis : ApisService , private http : HttpClient){}
  T ;
  info ;
onClick(){
  return this.apis
  .getTime()
  .subscribe((data) => {
    this.T = data,
    //JSON.stringify(Times);
    console.log(this.T)})
}

  title = 'clock';
}
