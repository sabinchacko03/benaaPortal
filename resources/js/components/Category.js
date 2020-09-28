import React, {Component} from 'react';
import ReactDOM from 'react-dom';
import SubCategoryHome from './SubCategoryHome';
import AddToCartButton from './AddToCartButton';


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
                    <div className="block-categories__item category-card category-card--layout--classic">
                        <div className="category-card__body">
                            <div className="category-card__image">
                                <a href={"product/" + category.Name.replace(/ /g,"-").toLowerCase()}><img src={category.Image_URL__c} alt="" /></a>
                            </div>
                            <div className="category-card__content" style={{width: '53%'}}>
                                <div className="category-card__name">
                                    <a href={"product/" + category.Name.replace(/ /g,"-").toLowerCase()} style={{textTransform: 'capitalize'}}>{category.Name}</a>                                    
                                </div>  
                                <ul className="category-card__links">
                                    <SubCategoryHome categories={category} />
                                </ul>
                                <div className="category-card__all">
                                    <a href={"product/" + category.Name.replace(/ /g,"-").toLowerCase()}>Show All</a>
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
