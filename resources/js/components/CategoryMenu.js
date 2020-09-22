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
        axios.get('http://localhost/benaa-portal/api/categories').then(response => {
            this.setState({
                categories: response.data
            });
        });
    }

    render() {
        console.log(process.env.PUBLIC_URL);
        const {categories} = this.state;
        categories.unshift({Id: 'All', Name : 'All Categories'});
        return (
                    categories.map(category => (
                        <option value={category.Id} style={{textTransform: 'capitalize'}}>{category.Name.toLowerCase()}</option>
                    ))                
                );
    }
}

if (document.getElementById('categorySearchList')) {
    ReactDOM.render(<CategoryMenu />, document.getElementById('categorySearchList'));
}
