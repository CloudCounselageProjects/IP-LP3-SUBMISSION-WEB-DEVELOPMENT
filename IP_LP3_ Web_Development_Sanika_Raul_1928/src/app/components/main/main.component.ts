import { Component} from "@angular/core";

import {HttpClient} from "@angular/common/http";
import {NgForm} from  '@angular/forms';

@Component({
  selector: 'app-main',
  templateUrl: './main.component.html',
  styleUrls: ['./main.component.css']
})
export class MainComponent {
 
    public results:any;
  show: boolean = false;
  constructor(private http: HttpClient) {}


  onAddLocation(form: NgForm)
 {
      if (form.invalid) {
        return;
      }
       this.http.get<{results:any}>("http://localhost:3000/location")
         .subscribe(responseData => {
           this.results = responseData.results;
           this.show=true;
          }); 
      form.resetForm();
 }


  
  
 
  
}
