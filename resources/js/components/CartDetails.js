import React, {Component} from 'react';
import ReactDOM from 'react-dom';

class CartDetails extends React.Component{
    constructor(props){
        super(props);
        this.state = {
            cart: [],
            total: 0,
            subtotal: 0,
            tax: 0,
        }
    }

    componentDidMount() {
        axios.get('api/getcart').then(response => {
            this.setState({
                cart: response.data.cart,
                subtotal: response.data.subtotal,
                total: response.data.total,
                tax: response.data.tax,
            });
        });
    }

    render(){
        console.log(this.props);
        const {cartDetails} = this.state.cart;
        return(            
            <div className="col-12 col-lg-6 col-xl-5 mt-4 mt-lg-0">
                <div className="card mb-0">
                    <div className="card-body">
                        <h3 className="card-title">Your Order</h3>
                        <table className="checkout__totals">
                            <thead className="checkout__totals-header">
                                <tr>
                                    <th>Product</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody className="checkout__totals-products">
                            {this.state.cart.map(item =>
                                    <tr>
                                        <td>{item.name}</td>
                                        <td>{item.subtotal}</td>
                                    </tr>
                                )}                        
                            </tbody>
                            <tbody className="checkout__totals-subtotals">
                                <tr>
                                    <th>Subtotal</th>
                                    <td>AED {this.state.subtotal}</td>
                                </tr>
                                <tr>
                                    <th>Tax</th>
                                    <td>AED {this.state.tax}</td>
                                </tr>
                                <tr>
                                    <th>Shipping</th>
                                    <td>NA</td>
                                </tr>
                            </tbody>
                            <tfoot className="checkout__totals-footer">
                                <tr>
                                    <th>Total</th>
                                    <td>AED {this.state.total}</td>
                                </tr>
                            </tfoot>
                        </table>
                        <div className="payment-methods">
                            <ul className="payment-methods__list">
                                <li className="payment-methods__item payment-methods__item--active">
                                    <label className="payment-methods__item-header">
                                        <span className="payment-methods__item-radio input-radio">
                                            <span className="input-radio__body">
                                                <input className="input-radio__input" name="checkout_payment_method" type="radio"/>
                                                <span className="input-radio__circle"></span>
                                            </span>
                                        </span>
                                        <span className="payment-methods__item-title">Cash on delivery</span>
                                    </label>
                                    <div className="payment-methods__item-container">
                                        <div className="payment-methods__item-description text-muted">
                                            Pay with cash upon delivery.
                                        </div>
                                    </div>
                                </li>
                                <li className="payment-methods__item">
                                    <label className="payment-methods__item-header">
                                        <span className="payment-methods__item-radio input-radio">
                                            <span className="input-radio__body">
                                                <input className="input-radio__input" name="checkout_payment_method" type="radio"/>
                                                <span className="input-radio__circle"></span>
                                            </span>
                                        </span>
                                        <span className="payment-methods__item-title">Credit Card</span>
                                    </label>
                                    <div className="payment-methods__item-container">
                                        <div className="payment-methods__item-description text-muted">
                                            Pay using Credit via Network Payment Solutions.
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        
                        <button type="submit" name="submit" value="submit" className="btn btn-primary btn-xl btn-block">Place Order</button>
                        <div className="text-center">
                            <button type="submit" name="submit" value="quote" className="btn btn-primary btn-md mt-3">Get Your Quote</button>
                        </div>
                    </div>
                </div>
            </div>
        )
    }
}

export default CartDetails