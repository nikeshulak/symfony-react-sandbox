import React from 'react'
// import RecipeSearchList from '../../common/components/RecipeSearchList'
import MapWidget from "../../common/components/Maps/Maps";
import { Link } from "react-router-dom";
import { Helmet } from "react-helmet";

// import NavLink from './layout/NavLink';
import HeaderTemplate from './layout/HeaderTemplate';
import Footer from './layout/Footer';
// import Header from "../../common/components/Layout/Header";





// Simple example of a React "smart" component
export default class Maps extends React.Component {

    constructor(props, context) {
        super(props, context)

        /*if (this.props.recipes) {
            this.state = {
                recipes: this.props.recipes,
                loading: false,
            }
        } else {
            this.state = {
                recipes: null,
                loading: true
            }
        }*/
    }

    componentDidMount() {
        /*if (this.state.loading) {
            fetch(this.props.base + '/api/recipes').then((response) => {
                return response.json()
            }).then((data) => {
                this.setState({
                    recipes : data,
                    loading: false
                })
            })
        }*/

        // const script = document.createElement("script");

        // script.src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyD9NyvFIa3inSZ1dw3rNrGm1o-xKmxhKdc&callback=initMap";
        // script.async = true;

        // document.body.appendChild(script);


        // js
        initMap();
        $(document).ready(function() {
          // height for homepage map
          $('.homepage #map').height($(window).height() - $('header').height() - $('nav').height());
        });
        // end js


    }

    render() {
        /*if (this.state.loading) {
            return (
                <div>
                Loading...
                </div>
            )
        } else {*/

            return (
                <div id="page" className="site">

                    <HeaderTemplate />

                    <div className="content">
                        <Helmet>
                          <title>Map</title>
                        </Helmet>

                        <div className="homepage container-fluid">
                            <div className="row row-no-padding">
                                <div className="col-md-9 pull-left">
                                    <div id="map"></div>
                                </div>

                                {/*sidebar*/}
                            </div>
                        </div>

                        {/*<ol className="breadcrumb">
                            <li className="active">Map</li>
                        </ol>*/}

                        {/*<RecipeSearchList recipes={this.state.recipes} routePrefix={this.props.base}/>*/}

                        <MapWidget />
                    </div>

                    <Footer />

                </div>
            )

        // }
    }
}
