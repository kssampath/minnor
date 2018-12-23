import React, { Component } from 'react';
import logo from './logo.svg';
import './App.css';
import '../node_modules/font-awesome/css/font-awesome.min.css'
import { Button, FormGroup, FormControl, ControlLabel ,Navbar, Nav, NavItem, NavDropdown, MenuItem } from "react-bootstrap";
class App extends Component {
	 constructor(props) {
    super(props);
    this.state = {
     email:"",
	 password1:""
    };
    this.handleChange1= this.handleChange1.bind(this);
	this.handleChange2= this.handleChange2.bind(this);
    this.handleSubmit = this.handleSubmit.bind(this);
  }
    handleChange1(event) {
    this.setState({email: event.target.value});
  }
    handleChange2(event) {
    this.setState({password1: event.target.value});
  }
  handleSubmit(event) {
    event.preventDefault();
  }
  render() {
    return (
	
     <div className="login">
	 <Navbar>
                <Navbar.Header>
                    <Navbar.Brand>
                        <a href="#">React-Bootstrap</a>
                    </Navbar.Brand>
                </Navbar.Header>
                <Nav>
                    <NavItem eventKey={1} href="#">Link</NavItem>
                    <NavItem eventKey={2} href="#">Link</NavItem>
                </Nav>
            </Navbar>
	  <h1><center>STUDENT LOGIN</center> </h1>
	  <i className="fa fa-spinner fa-spin"></i>
	  <form onSubmit={this.handleSubmit} className="form-1">
	   <label>
          Email:
		  </label>
		  	<p className="field">
          <input  name="email"type="text" Placeholder="Email"  value={this.state.email} onChange={this.handleChange1} />
				<i className="fa fa-address-book"></i>
			</p>
		    <label>
          Password:
		    </label>
		  <p className="field">
			<input name="password1" type="text" Placeholder="Password" value={this.state.password1} onChange={this.handleChange2} />
				<i className="fa fa-lock"></i>
		</p>
		<p className="submit">
          <button
            type="submit"
          ><i className="fa fa-arrow-circle-right fa-2x"></i>
          </button>
		  </p>
        </form>
	 </div>
    );
  }
}

export default App;
