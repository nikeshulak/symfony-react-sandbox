import React from 'react'
import RecipeSearchList from '../../common/components/RecipeSearchList'
import { Link } from "react-router-dom";
import { Helmet } from "react-helmet";

import HeaderTemplate from './layout/HeaderTemplate';

// Simple example of a React "smart" component
export default class Recipes extends React.Component {

    constructor(props, context) {
        super(props, context)
        if (this.props.recipes) {
            this.state = {
                recipes: this.props.recipes,
                loading: false,
            }
        } else {
            this.state = {
                recipes: null,
                loading: true
            }
        }
    }

    componentDidMount() {
        if (this.state.loading) {
            fetch(this.props.base + '/api/recipes').then((response) => {
                return response.json()
            }).then((data) => {
                this.setState({
                    recipes : data,
                    loading: false
                })
            })
        }
    }

    render() {
        if (this.state.loading) {
            return (
                <div>
                    <HeaderTemplate />
                    Loading...
                </div>
            )
        } else {
            return (
                <div>
                    <HeaderTemplate />

                    <Helmet>
                      <title>Recipes List</title>
                    </Helmet>

                    <ol className="breadcrumb">
                        <li className="active">Recipes</li>
                    </ol>

                    <RecipeSearchList recipes={this.state.recipes} routePrefix={this.props.base}/>
                </div>
            )
        }
    }
}
