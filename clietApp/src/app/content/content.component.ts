import { Component, OnInit } from '@angular/core';
import {SubjectService} from "../services/subject.service";
import {HttpClient, HttpClientModule} from "@angular/common/http";
import {Subject} from "../models/subject.model";

@Component({
  selector: 'app-content',
  templateUrl: './content.component.html',
  styleUrls: ['./content.component.css']
})
export class ContentComponent implements OnInit {

  api = 'http://127.0.0.1:8000/api';
  subjects: Subject[];
  subject: Subject = {
    name:null,
    description: null
  };
  constructor(private SubjectService: SubjectService, private httpClient: HttpClient) {
    this.httpClient.get(this.api + '/subjects').subscribe((data: Subject[]) => {
      // console.log(data);
      this.subjects = data;
    },(error) => {
      console.log(error);
    });
  }

  save(){
    console.log(this.subjects);
  };
  ngOnInit() {
  }

}
