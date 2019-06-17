
import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter as Router, Route, Link, Switch} from "react-router-dom";

import StartPage from "./components/StartPage";
import {dashboard as Dashboard} from './components/dashboard' ;
import BasicDetails from './components/BasicDetails';
import Template from './components/dashboard-components/Template';
import Details from './components/dashboard-components/Details';
import Story from './components/dashboard-components/Story';
import editStory from './components/dashboard-components/Story/editStory';


export class Index extends Component {
  constructor(){
    super();
    this.state = {
      userurl : "",
    }

  }
  render() {
    localStorage.setItem("secretKey", "dac585054a514b80a50b84394fcbc7dc");
    return (

      <div className="row">
        <div className="col-md-8">
        <Router>
          <Switch> 
          <Route exact path='/builder' 
            component={()=> 
            <StartPage 
            userurl={this.state.userurl} 
          />}/>
          <Route exact path='/builder/basic-details' 
            component={()=> 
            <BasicDetails 
            ChangeUrl ={this.ChangeUrl(url)} 
            userurl={this.state.userurl} 
          />}/>

          <Route exact path="/builder/dashboard" render={(props)=>
            <Dashboard {...props}/>
            }/>

            <Route exact path="/builder/dashboard/template" 
                  component = { ()=> 
                              <Template />
                          }
            />
             <Route exact path="/builder/dashboard/basic-details" render={(props)=>
                    <Details {...props} user={this.state.userurl}/>
              }/>
             <Route exact path="/builder/dashboard/story" render={(props)=>
                    <Story {...props}/>
              }/>
              <Route exact path="/builder/dashboard/story/:id" component={editStory}/>
            </Switch>
        </Router>
        </div>
        <div className="col-md-4">
        </div>
      </div>  
    )
  }
}

export default Index
if (document.getElementById('app')) {
    ReactDOM.render(<Index />, document.getElementById('app'));
}