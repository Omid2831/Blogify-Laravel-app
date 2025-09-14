import React from 'react';
import NavBar from '../components/Navbar';

// interfaces 
interface pageNameProp{
  pageName: string;
}

const About:React.FC<pageNameProp> = ({pageName}) => {
  return (
    <>
            <div className='border-4 w-full h-full border-red-600'>
                <NavBar />
            <div className='border-4 m-[15rem] mb-4 p-5 border-l-yellow-500 border-r-yellow-500'>
                <main className="border-4 border-gray-900">
                    <p className='text-4xl md:text-6xl lg:text-8xl text-center'>You are in {pageName} page </p>
                </main>
            </div>
            </div>
        </>
  );
}
;
export default About;