import React from 'react';
import './EmptyCity.css';

const EmptyCity = ({loadCities}) => {
    return (
        <div className="empty-city-container text-center">
            {loadCities ? <h1 className='mt-5 text-danger'>No information available for the searched city!</h1> : ''}
        </div>
    );
};

export default EmptyCity;
