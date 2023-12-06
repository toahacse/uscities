import React, { useState } from 'react';
import UsCity from '../UsCity/UsCity';
import SearchOption from '../SearchOption/SearchOption';
import './Cities.css'
import EmptyCity from '../EmptyCity/EmptyCity';

const CitySearch = () => {

    const [citiesData, setCitiesData] = useState([])
    const [loadCities, setLoadCities] = useState(false)

    const handleFilterCities = async (city, state, county) => {
        if(city === '' && state=== ''  && county ===''){
            setCitiesData([]);
            setLoadCities(false);
            alert('Please, Enter the name, state, or county to search for cities!')
        }else{
            try {
              const apiUrl = `http://127.0.0.1:8000/api/uscities/cities-api-data?city=${city}&state=${state}&county=${county}`;
        
              const response = await fetch(apiUrl);
        
              if (!response.ok) {
                throw new Error(`API request failed with status ${response.status}`);
              }
              const data = await response.json();
              setCitiesData(data);
              setLoadCities(true);
            } catch (error) {
              console.error('Error fetching data:', error);
            }
        }
    };

  return (
    <>
        <div className='main-container'>
            <div className='bg-info text-light text-center py-3'>
                <h1>Find your city information</h1>
                <p>Enter the name, state, or county to search for cities</p>

                <SearchOption handleFilterCities={handleFilterCities} />
            </div>
            {citiesData.length > 0 ?
                (<div className='cities-container'>  {citiesData.map((city) => ( <UsCity key={city.id} city={city} />))} </div>) 
                : 
                <EmptyCity loadCities={loadCities}/>
            }
        </div>
    </>
  );
};

export default CitySearch;
