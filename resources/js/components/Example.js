import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter, Route, Link} from "react-router-dom";

import axios from 'axios';


export default class Example extends Component {
    constructor(){
        super();
        this.state = {
            item:1,
            url : 'http://laravelapi.test/api/article',
            next : "",
            prev : null,
            data:[],
        }

        this.loadArticle = () => {
            axios({
                method:'get',
                url:this.state.url,
                responseType:'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
              })
            .then( (response) => {
                let data = response.data.data;
                let links = response.data.links;
                let next = response.data.links.next;
                let prev = response.data.links.prev;
                // this.setState({prev},{next});
                this.setState({data, next, prev});
                // console.log(next);
            });
        }

        this.setNextUrl = () =>{
            const next =this.state.next;
            if(next !=null){
            this.setState({"url": next});
            this.componentDidMount();
            }
        }
    }
    componentDidMount(){
        
        this.loadArticle();
    }

    
    render() {
        return (
            <BrowserRouter>
            <div>
            <li>
              <Link to="/react/home">Form</Link>
            </li>
            <Route exact path="/home" Component={home}/>                
            <li>
              <Link to="/react/form">Form</Link>
            </li>
            <Route exact path="/react/form" Component={form} />
            </div>
            </BrowserRouter>
        );
    }
}

// if (document.getElementById('example')) {
//     ReactDOM.render(<Example />, document.getElementById('example'));
// }
