import { Component, OnInit } from '@angular/core';

import { FetchDataService } from './fetch-data.service';
@Component({
  selector: 'app-fetch-data',
  templateUrl: './fetch-data.component.html',
  styleUrls: ['./fetch-data.component.css']
})
export class FetchDataComponent implements OnInit {
  date = ""; 
  constructor(private fetchdataService : FetchDataService) { }

  OnclickofButton() {
  this.fetchdataService.getAPIData().subscribe((response)=>{
    console.log('response is ', response)
    this.date=response+"";
},(error) => {
    console.log('error is ', error)
})
}

  ngOnInit() {
  }

}
