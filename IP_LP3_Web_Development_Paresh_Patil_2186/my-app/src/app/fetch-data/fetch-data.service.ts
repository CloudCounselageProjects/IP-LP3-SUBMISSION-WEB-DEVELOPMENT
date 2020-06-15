import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class FetchDataService {
  static getAPIData() {
    throw new Error("Method not implemented.");
  }

  constructor(private http: HttpClient) { }

  getAPIData(){
    return this.http.get('http://localhost:3000/users',{responseType: 'text'})
  }
}