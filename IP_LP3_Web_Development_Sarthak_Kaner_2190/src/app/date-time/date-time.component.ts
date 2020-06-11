import { Component, OnInit } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Component({
  selector: 'app-date-time',
  templateUrl: './date-time.component.html',
  styleUrls: ['./date-time.component.css']
})
export class DateTimeComponent implements OnInit {

  constructor(private http: HttpClient) { }
  
  ngOnInit(): void {
  
  }

  myFunc(){
    let sysDT = this.http.get("http://localhost:7777/api/datetime", { responseType: 'text' });
    sysDT.subscribe((data) =>document.getElementById('sysDateTime').innerHTML=data);
  }
}