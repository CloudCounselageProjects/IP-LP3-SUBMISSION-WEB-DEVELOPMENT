import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { from, Observable, throwError } from 'rxjs';
import { T } from './t';
@Injectable({
  providedIn: 'root'
})
export class ApisService {
  info : string
  constructor(private httpClient: HttpClient) {  }

  getTime() : Observable<T[]> {
    return this.httpClient.get<T[]>('http://localhost:5000', {observe : "body"})
   
  } 
 
}
