import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter as Router, Route, Link} from "react-router-dom";
import Template from './dashboard-components/Template';
import Details from './dashboard-components/Details';

export class dashboard extends Component {
    constructor(){
        super();
        this.state = {
            userId : localStorage.getItem('userID'), 
        }
        this.componentDidMount =() =>{
        }
    }
  render() {
    return (
      <div>
            <div>
                <h1>Design Of Website</h1>
                <ul>
                    <li>
                        <Link to={this.props.match.path +"/template"} >Template</Link>    
                    </li>
                    <li>
                        <Link to={this.props.match.path +"/fonts"} >fonts</Link>
                    </li>
                </ul>
                <hr></hr>
            </div>
            <div>
                <h1>Add Wedding Details</h1>
                <ul>
                    <li><Link to={this.props.match.path +"/basic-details"} >Basic Details</Link></li>
                    <li><Link to={this.props.match.path +"/story"} >Story</Link></li>
                    <li><Link to={this.props.match.path +"/schedule"} >Schedule</Link></li>
                    <li><Link to={this.props.match.path +"/friends-family"} >Friends & Family</Link></li>
                    <li><Link to={this.props.match.path +"/about"} >About</Link></li>
                    <li><Link to={this.props.match.path +"/registry"} >Registry</Link></li>
                    <li><Link to={this.props.match.path +"/photo-gallery"} >Photo Gallery</Link></li>
                    <li><Link to={this.props.match.path +"/other-section"} >Other Section</Link></li>
                </ul>
            </div>
            <div>
                <h1>Manage</h1>
                <ul>
                    <li><Link to={this.props.match.path +"/rsvp"} >RSVP</Link></li>
                    <li><Link to={this.props.match.path +"/setting"} >Setting</Link></li>
                </ul>
            </div>
      </div>
    )
  }
}

export default dashboard
