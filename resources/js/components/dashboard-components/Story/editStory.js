import React, { Component } from 'react'

export class editStory extends Component {
    constructor(){
        super();
        this.state = {
            postid: "",
            userid: localStorage.getItem('userID'),
        }

        this.componentDidMount = () =>{
            this.setState({postid: this.props.match.params.id})
            this.fetchUserInfo();
        }

        this.fetchUserInfo = () =>{
            if(this.state.userid != "" || this.state.userid != null){
                axios.get("http://laravelapi.test/api/userurl/"+this.state.userid+"/edit/story/3")
                .then((res) =>{
                    // const data = res.data.story;
                    console.log(res)
                    // this.setState({'data':data});
                })
            }
        }
    }
  render() {
    return (
      <div>
        EDIT Story
      </div>
    )
  }
}

export default editStory
