import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter as Router, Route, Link, Redirect} from "react-router-dom";

export class BasicDetails extends Component {
  constructor(){
    super();
    this.state ={
      submitted: false,
    }
    this.submit = (e) =>{
      e.preventDefault();
      // console.log(this.props);
      this.setState({submitted:true})
    }
  }
  render() {
    if(this.state.submitted){
      return <Redirect to="/builder/dashboard" />
    }else{
    return (
      <div>
        <div className="container">
          <h1>BasicDetails</h1>
          {console.log(this.props)}
          <form className="mt-5" onSubmit={this.submit}>
            <h3>Groom Name</h3>
          <div className="row">
              <div className="col-6">
                  <label htmlFor="first-name">First Name</label>
                  <input type="text" className="form-control" id="first-name" placeholder="Please Enter Your First Name" name="groom-first-name" onChange={this.changeState}></input>
                </div>
              <div className="col-6">
                <label htmlFor="last-name">Last Name</label>
                <input type="text" className="form-control" id="last-name" placeholder="Please Enter Your Last Name" name="groom-last-name" onChange={this.changeState}></input>
              </div>
          </div>
            <h3>Bride Name</h3>
          <div className="row">
              <div className="col-6">
                  <label htmlFor="first-name">First Name</label>
                  <input type="text" className="form-control" id="first-name" placeholder="Please Enter Your First Name" name="bride-first-name" onChange={this.changeState}></input>
                </div>
              <div className="col-6">
                <label htmlFor="last-name">Last Name</label>
                <input type="text" className="form-control" id="last-name" placeholder="Please Enter Your Last Name" name="bride-last-name" onChange={this.changeState}></input>
              </div>
          </div>
          <button type="submit">Submit</button>
          </form>
        </div>
      </div>
    )
    }
  }
}

export default BasicDetails
