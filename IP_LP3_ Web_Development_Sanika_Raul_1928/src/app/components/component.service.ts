import { Injectable } from '@angular/core';
import {HttpClient} from "@angular/common/http";
import { Subject } from "rxjs";
import { map } from 'rxjs/operators';

@Injectable({
  providedIn: 'root'
})
export class ComponentService
{
    private results ={};
    private data= {};
    constructor(private http: HttpClient) { }
  

    addLocation()
    {
       
        this.http.get<{results:any,data:any}>("http://localhost:3000/location")
         .subscribe(responseData => {
           this.results = responseData.results;
           this.data = responseData.data;
          });    
    }

     
 }

