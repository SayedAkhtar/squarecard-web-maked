import React, { Component } from 'react';
import {Link,Route,Redirect } from 'react-router-dom';
import Axios from 'axios';
import editStory from "./Story/editStory";
import SimpleCard from "../material-components/Cards";


export class Story extends Component {
    constructor(){
        super();
        this.state ={
            userid: localStorage.getItem('userID'),
            data: null
        }
        this.componentDidMount = ()=>{
            // console.log(this.props)
            this.fetchUserInfo();
        }
        this.fetchUserInfo = () =>{
            if(this.state.userid != "" || this.state.userid != null){
                axios.get("http://laravelapi.test/api/userurl/"+this.state.userid)
                .then((res) =>{
                    const data = res.data.story;
                    console.log(data)
                    this.setState({'data':data});
                })
            }
        }
        this.change = (id)=>{
            console.log(id);
            <Redirect to={this.props.match.url+"/"+id} />
        }
        this.changeUserInfo = (id) =>{
            console.log(id);
        }
    }
  render() {
      if(this.state.data == null){
          return null;
      }
    return (
      <div>
          
        {console.log(this.props)}
        {
            this.state.data.map((item)=>
            <div key={item.id}>
             <SimpleCard id={item.id} data={item} change={this.change} url={this.props.match.url}/>
             <br /> 
             </div>
            )
        }

            
      </div>
    )
  }
}

export default Story
