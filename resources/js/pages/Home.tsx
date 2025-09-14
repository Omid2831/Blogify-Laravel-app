import React from 'react';
import NavBar from './components/Navbar';

// interfaces 
interface pageNameProp {
    pageName: string;
}

const Home: React.FC<pageNameProp> = ({ pageName }) => {
    return (
        <div className='bg-amber-700 min-h-screen'>
            <NavBar />
            <div className='flex items-center justify-center min-h-[calc(100vh-80px)] px-4'>
                <div className='bg-gray-800 border-4 border-black rounded-lg p-8 max-w-4xl w-full'>
                    <h2 className='text-4xl md:text-6xl lg:text-8xl text-center text-white font-bold'>
                        You are in {pageName} page
                    </h2>
                </div>
            </div>
        </div>
    )
}

export default Home;