import React, {Component} from 'react';
import ReactDOM from 'react-dom';

class Category extends Component {
    constructor(props) {
        super(props);
        this.state = {
            projects: []
        };
    }

    componentDidMount() {
        axios.get('benaaportal/api/categories').then(response => {
            this.setState({
                projects: response.data
            });
        });
    }

    render() {
        const {projects} = this.state;
        return (
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h3 class="title">Categories</h3>
                            </div>
                            {projects}
                            <ul className='list-group list-group-flush'>
                                {projects.map(project => (
                                                <li>{project.id}</li>
                                                        ))}
                            </ul>
                        </div>
                    </div>
                </div>
                );
    }
}

if (document.getElementById('categoryDiv')) {
    ReactDOM.render(<Category />, document.getElementById('categoryDiv'));
}
