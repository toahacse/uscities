import React from 'react';

const SearchOption = ({handleFilterCities}) => {
    
    const handleFilterFormSubmit = (event) =>{
        event.preventDefault()
        handleFilterCities(event.target.city.value, event.target.state.value, event.target.county.value);
    }

    return (
            <div className='container'>
                <form onSubmit={handleFilterFormSubmit} className="form-inline justify-content-center">
                <div className="form-group mb-2 mr-2">
                    <label className="sr-only" htmlFor="city">City</label>
                    <input type="text" id="city" name="city" className="form-control" placeholder='Enter City Name' />
                </div>
                <div className="form-group mb-2 mr-2">
                    <label className="sr-only" htmlFor="state">State</label>
                    <input type="text" id="state" name="state" className="form-control" placeholder='Enter State' />
                </div>
                <div className="form-group mb-2 mr-2">
                    <label className="sr-only" htmlFor="county">County</label>
                    <input type="text" id="county" name="county" className="form-control" placeholder='Enter County' />
                </div>
                <div className="form-group mb-2 mr-2">
                    <button className="btn btn-success" type="submit"><i className='fas fa-search'></i> Search</button>
                </div>
                </form>
            </div>
    );
};

export default SearchOption;