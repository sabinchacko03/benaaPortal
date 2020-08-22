import React, {Component} from 'react';
import ReactDOM from 'react-dom';

class Category extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            projects: []
        };
    }

    componentDidMount() {
        axios.get('api/categories').then(response => {
            this.setState({
                projects: response.data
            });
        });
    }

    render() {
        const {projects} = this.state;
        return (
                <div className="container">
                    <div className="row">
                        <div className="col-md-12">
                            <div className="section-title">
                                <h3 className="title">Categories</h3>
                            </div>
                            <div className='row'>
                                {projects.map(project => (
                                                <div class="col-md-3">
                                                    <a href={"product/" + project.Id}>
                                                        <div class="product">
                                                            <div class="product-img">
                                
                                                                <img src="public/img/product02.png" alt="" />                                                            
                                                            </div>
                                                            <div class="product-body">
                                                                <h3 class="product-name">{project.Name}</h3>
                                                                <div class="product-rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                            </div>                                                    
                                                        </div>
                                                    </a>
                                                </div>
                                                        )
                                            )
                                }
                            </div>
                        </div>
                    </div>
                </div>
                );
    }
}

if (document.getElementById('categoryDiv')) {
    ReactDOM.render(<Category />, document.getElementById('categoryDiv'));
}
