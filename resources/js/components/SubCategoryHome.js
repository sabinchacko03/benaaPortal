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
        return (
                validSubcategory ? (
                        categories.Categories__r.records.slice(0, 5).map(subCat =>(
                        <li style={{textTransform: 'capitalize'}} key={subCat.Id}><a href={"product/" + categories.Name.replace(/ /g,"-").toLowerCase() +"/"+ subCat.Name.replace(/ /g,"-").toLowerCase()}>{subCat.Name.toLowerCase()}</a></li>
                        )) ) : (
                        null
                    )
                
        );         
    }
}

export default SubCategoryHome
