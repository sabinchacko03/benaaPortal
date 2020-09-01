import React, {Component} from 'react';
import ReactDOM from 'react-dom';

class CategoryMenu extends React.Component {
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
        return (<select className="search__categories" aria-label="Category" id="categorySearchList">
                                        <option value="all">All Categories</option>
                {categories.map(category => (
                    <option value="{category.Id}">{category.Name.toLowerCase()}</option>
                ))}
                </select>
                
                                    
                                    );
    }
}

if (document.getElementById('categoryList')) {
    ReactDOM.render(<CategoryMenu />, document.getElementById('categoryList'));
}
