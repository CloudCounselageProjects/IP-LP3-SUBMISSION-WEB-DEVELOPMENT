import { Component } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
    
    url = "http://worldtimeapi.org/api/ip";
    items = [];

    constructor(private http:HttpClient){

      this.http.get(this.url).toPromise().then(
        data =>
        {
          console.log(data);
          this.items.push(data);
        }
      )
    }
}
