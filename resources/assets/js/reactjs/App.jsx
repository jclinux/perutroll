import React,{PropTypes} from 'react';
import {connect} from 'react-redux'
import * as catActions from './actions/catActions'

class App extends React.Component {
	constructor(props) {
		super(props);
	}
	componentDidMount() {
	  	var my_canvas = this.refs.canvas
	   	var ctx = my_canvas.getContext('2d')
	   	var img = new Image

	   	img.onload = () => {
	   		my_canvas.width = img.naturalWidth
	   		my_canvas.height = img.naturalHeight
	   		ctx.drawImage(img, 0 ,0, my_canvas.width, my_canvas.height)
	   	}
	   	img.src = 'https://avatars1.githubusercontent.com/u/1220198?v=3&s=52'
	}

	getNumeroAleatorio() {
		this.setState({num:Math.ceil(Math.random() * 10)});
	}

	render() {
		return (
			<div>
				<h3>Generador de App Meme </h3>
				<canvas id="my_canvas" ref="canvas"></canvas>
				<ul>
					{this.props.cats.map((item, index) => {
						return <li key={index}>{item.name}</li>
					})}
				</ul>
			</div>
			)
	}
};


function mapStateToProps(state, ownProps){
	//console.log(state.cats)
	return {
		cats: state.cats
	}
}
export default connect(mapStateToProps)(App);