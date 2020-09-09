import React, {Component} from 'react';
import ReactDOM from 'react-dom';

class AddToCartButton extends React.Component{
    constructor(props){
        super(props);
        this.state = {
            count : 1,
        };        
        this.addToCart = this.addToCart.bind(this);
    }

    addToCart(e) {
        const item = {item : e.target.value};
        this.setState({count : this.state.count+1})

        axios.post('api/addtocart', item).then(response => {
            console.log(response.data);
        });
    }

    render(){
        return(
            <button value="124" className="btn btn-primary btn-lg" onClick={this.addToCart}>
                Add to cart
            </button>
        );
    }
}

export default AddToCartButton;