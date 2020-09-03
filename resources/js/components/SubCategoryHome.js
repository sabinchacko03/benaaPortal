import React, {Component} from 'react';
import ReactDOM from 'react-dom';

class SubCategoryHome extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            categories: props,
            validSubcategory : false
        };
    }

    componentDidMount() {
        
    }

    render() {
        const {categories} = this.state.categories;
        let validSubcategory = false;
        if(categories.Categories__r && categories.Categories__r.records.length){
            validSubcategory = true;            
        }
        console.log(categories.Name);
        
        return (
                validSubcategory ? (
                        categories.Categories__r.records.slice(0, 5).map(subCat =>(
                        <li style={{textTransform: 'capitalize'}} key={subCat.Id}><a href={"product/" + categories.Id +"/"+ subCat.Id}>{subCat.Name.toLowerCase()}</a></li>
                        )) ) : (
                        <li></li>
                    )
                
        );         
    }
}

export default SubCategoryHome
