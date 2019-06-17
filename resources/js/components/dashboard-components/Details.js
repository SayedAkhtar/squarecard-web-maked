import React, { Component } from 'react'
import Axios from 'axios';

export class Details extends Component {
    constructor(){
        super();
        this.state ={
            userid: localStorage.getItem('userID'),
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
                    console.log(res)
                    this.setState({...data});
                })
            }
        }
    }
  render() {
    return (
      <div>
          
          <div>Event Name: {this.state.event_name}</div>
          <div>Event Date: {this.state.event_date}</div>
          <div>Bride Name: {this.state.bride_name}</div>

          {/* 
            "event_name": "BbqmLsTdLe",
            "event_date": "09/09/2019",
            "bride_name": "Abhishek Mishra",
            "groom_name": "Simran Gupta",
            "venue": "Shama Mahal",
            "created_at": null,
            "updated_at": null      
        */}
      </div>
    )
  }
}

export default Details
