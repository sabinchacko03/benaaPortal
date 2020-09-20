import React, {Component} from 'react';
import ReactDOM from 'react-dom';
import CartDetails from './CartDetails';

class Checkout extends React.Component{
    constructor(props){
        super(props);
        this.state = {
            regions: [],
            selectedRegion: '',
            cartInfo: [],
        }
        this.handleChange = this.handleChange.bind(this);
    }

    componentDidMount() {
        axios.get('api/getregions').then(response => {
            this.setState({
                regions: response.data
            })
            .catch(function (error) {
                console.log(error);
            });
        });

        axios.get('api/getcart').then(response => {
            this.setState({
                cartInfo : response.data,
            });
        });
    }


    handleChange(e){
        this.setState({
            selectedRegion: e.target.value,
        });

        axios.post('api/updateshipping', {
            region: e.target.value
          })
          .then(function (response) {
            console.log(response);
          })
          .catch(function (error) {
            console.log(error);
          });
    };


    render(){
        let {shippingZones} = this.state;
        return(
            <div className="row">
                <div className="col-12 mb-3">
                    <div className="alert alert-lg alert-primary">Returning customer? <a href="">Click here to login</a></div>
                </div>
                <div className="col-12 col-lg-6 col-xl-7">
                    <div className="card mb-lg-0">
                        <div className="card-body">                        
                            <h3 className="card-title">Billing details</h3>
                            <div className="form-row">
                                <div className="form-group col-md-6">
                                    <label for="checkout-first-name">First Name *</label>
                                    <input type="text" className="form-control" id="checkout-first-name" placeholder="First Name" name="firstname" required />
                                </div>
                                <div className="form-group col-md-6">
                                    <label for="checkout-last-name">Last Name *</label>
                                    <input type="text" className="form-control" id="checkout-last-name" placeholder="Last Name" name="lastname" required />
                                </div>
                            </div>
                            <div className="form-group">
                                <label for="checkout-company-name">Company Name <span className="text-muted">(Optional)</span></label>
                                <input type="text" className="form-control" id="checkout-company-name" placeholder="Company Name" name="company"/>
                            </div>
                            <div className="form-group">
                                <label for="checkout-country">Country</label>
                                <select id="checkout-country" required className="form-control form-control-select2" name="country">
                                    <option value="uae">United Arab Emirates</option>
                                </select>
                            </div>
                            <div className="form-group">
                                <label for="checkout-state">Region *</label>
                                <select id="checkoutRegion" required className="form-control" name="region" onChange={this.handleChange}>
                                <option value=''></option>
                                    {this.state.regions.map(zone=>(                                        
                                        <option value={zone}>{zone}</option>
                                    ))}
                                </select>
                            </div>
                            <div className="form-group">
                                <label for="checkout-street-address">Street Address</label>
                                <input type="text" className="form-control" id="checkout-street-address" placeholder="Street Address" name="street"/>
                            </div>
                            <div className="form-group">
                                <label for="checkout-address">Apartment, suite, unit etc. <span className="text-muted">(Optional)</span></label>
                                <input type="text" className="form-control" id="checkout-address" name="apartment"/>
                            </div>                         
                            <div className="form-group">
                                <label for="checkout-postcode">Postcode / ZIP</label>
                                <input type="text" className="form-control" id="checkout-postcode" name="postcode" />
                            </div>
                            <div className="form-row">
                                <div className="form-group col-md-6">
                                    <label for="checkout-email">Email address *</label>
                                    <input type="email" className="form-control" id="checkout-email" placeholder="Email address" name="email" required />
                                </div>
                                <div className="form-group col-md-6">
                                    <label for="checkout-phone">Phone *</label>
                                    <input type="text" className="form-control" id="checkout-phone" placeholder="Phone" name="phone" required />
                                </div>
                            </div>
                            <div className="form-group">
                                <div className="form-check">
                                    <span className="form-check-input input-check">
                                        <span className="input-check__body">
                                            <input className="input-check__input" type="checkbox" id="checkout-create-account"/>
                                            <span className="input-check__box"></span>
                                            <svg className="input-check__icon" width="9px" height="7px">
                                                <use xlinkHref="http://localhost/benaa-portal/images/sprite.svg#check-9x7"></use>
                                            </svg>
                                        </span>
                                    </span>
                                    <label className="form-check-label" for="checkout-create-account">Create an account?</label>
                                </div>
                            </div>
                        </div>
                        <div className="card-divider"></div>
                    </div>
                </div>
                <CartDetails cartInfo={this.state.cartInfo}/>
            </div>
        )
    }
}

if (document.getElementById('checkoutArea')) {
ReactDOM.render(<Checkout />, document.getElementById('checkoutArea')
  );
}