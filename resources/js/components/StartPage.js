import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter as Router, Route, Link, Redirect} from "react-router-dom";
import Axios from 'axios';
import SimpleCrypto from "simple-crypto-js";

export class StartPage extends Component {

  constructor(){
    super();
    this.state = {
      email: "",
      password : "",
      submitted : false,
      secret : localStorage.getItem('secretKey')
    }
    this.changeState = (e) =>{
      this.setState({[e.target.name]:e.target.value})
    }
    this.submit = (e) =>{
      e.preventDefault();
      axios.post("http://laravelapi.test/api/user/"+this.state.email)
      .then((res) => {
        const password = res.data.password;
        console.log(res);
        if (this.state.password === password){
          localStorage.setItem("userID", res.data.UserUrl);
          //At the end
          this.setState({"submitted":true});
        }
        else{
          alert("wrong password");
        }
      } )
      // var simpleCrypto = new SimpleCrypto(this.state.secret);
      // var chiperText = simpleCrypto.encrypt(this.state.password);
    }
  }
  render() {
    if(this.state.submitted){
      return <Redirect to="builder/dashboard"/>
    }
    return (
      <div>
        <div className="StartPage">
          <div className="container">
            <h2 className="StartPage_heading">Create You Account</h2>
            <div className="StartPage__form">

              <div className="StartPage__form--facebook">
                <span className="StartPage__form--icon">
                  <i className="fab fa-facebook-f"></i> Login Using Facebook
                </span>
              </div>

              <div className="StartPage__form--google">
                <span className="StartPage__form--icon">
                  <i className="fab fa-google"></i> Login Using Google
                </span>
              </div>
              <form onSubmit={ this.submit }>
                <div className="form-group">
                  <label htmlFor="email">Email Address</label>
                  <input type="email" className="form-control" id="email" placeholder="Please Enter Your Email" name="email" onChange={this.changeState}></input>
                </div>
                <div className="form-group">
                  <label htmlFor="password">Password</label>
                  <input type="password" className="form-control" id="password" placeholder="Please Enter Your Password" name="password"  onChange={this.changeState}></input>
                </div>
                <button type="submit">Submit</button>
              </form>
              
            </div>
          </div>
        </div>
      </div>
    )
  }
}

export default StartPage;
