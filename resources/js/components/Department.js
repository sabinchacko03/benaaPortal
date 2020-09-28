import React, {Component} from 'react';
import ReactDOM from 'react-dom';
import SubCategoryHome from './SubCategoryHome';
import AddToCartButton from './AddToCartButton';


class Department extends React.Component {
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
                    <div className="departments  departments--open departments--fixed " data-departments-fixed-by=".block-slideshow">
                        <div className="departments__body">
                            <div className="departments__links-wrapper">
                                <div className="departments__submenus-container"></div>
                                <ul className="departments__links">
                                    <li className="departments__item">
                                        <a className="departments__item-link" href="">
                                            Power Tools
                                            <svg className="departments__item-arrow" width="6px" height="9px">
                                                <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                                            </svg>
                                        </a>
                                        <div className="departments__submenu departments__submenu--type--megamenu departments__submenu--size--xl">
                                            <!-- .megamenu -->
                                            <div className="megamenu  megamenu--departments ">
                                                <div className="megamenu__body" style="background-image: url('images/megamenu/megamenu-1.jpg');">
                                                    <div className="row">
                                                        <div className="col-3">
                                                            <ul className="megamenu__links megamenu__links--level--0">
                                                                <li className="megamenu__item  megamenu__item--with-submenu ">
                                                                    <a href="">Power Tools</a>
                                                                    <ul className="megamenu__links megamenu__links--level--1">
                                                                        <li className="megamenu__item"><a href="">Engravers</a></li>
                                                                        <li className="megamenu__item"><a href="">Drills</a></li>
                                                                        <li className="megamenu__item"><a href="">Wrenches</a></li>
                                                                        <li className="megamenu__item"><a href="">Plumbing</a></li>
                                                                        <li className="megamenu__item"><a href="">Wall Chaser</a></li>
                                                                        <li className="megamenu__item"><a href="">Pneumatic Tools</a></li>
                                                                        <li className="megamenu__item"><a href="">Milling Cutters</a></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                        )
                   )                    
                );
    }
}

if (document.getElementById('categoryDiv')) {
    ReactDOM.render(<Department />, document.getElementById('categoryDiv'));
}
