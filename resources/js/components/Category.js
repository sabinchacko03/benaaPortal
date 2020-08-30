import React, {Component} from 'react';
import ReactDOM from 'react-dom';

class Category extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            categories: []
        };
    }

    componentDidMount() {
        axios.get('api/categories').then(response => {
            this.setState({
                categories: response.data
            });
        });
    }

    render() {
        const {categories} = this.state;
        return (
                categories.map(category => (
                    <div class="block-categories__item category-card category-card--layout--classic">
                        <div class="category-card__body">
                            <div class="category-card__image">
                                <a href=""><img src="public/images/category.jpg" alt="" /></a>
                            </div>
                            <div class="category-card__content">
                                <div class="category-card__name">
                                    <a href="">{category.Name}</a>
                                </div>
                                <ul class="category-card__links">
                                    <li><a href="">Screwdrivers</a></li>
                                    <li><a href="">Milling Cutters</a></li>
                                    <li><a href="">Sanding Machines</a></li>
                                    <li><a href="">Wrenches</a></li>
                                    <li><a href="">Drills</a></li>
                                </ul>
                                <div class="category-card__all">
                                    <a href="">Show All</a>
                                </div>
                                <div class="category-card__products">
                                    572 Products
                                </div>
                            </div>
                        </div>
                    </div>
                                        )
                            )                    
                );
    }
}

if (document.getElementById('categoryDiv')) {
    ReactDOM.render(<Category />, document.getElementById('categoryDiv'));
}
