import BidDetails from "../components/BidDetails";



function Home() {

   

  

    return (
        <div className=" bg-custom-bg-gray">
        
        <div className="flex flex-col min-h-screen ">
       

        
        <h1 className=" text-xl  text-center font-quick font-semibold text-white p-2  sm:text-3xl mb-40 ">
            Bid Details 
        </h1>
       

        <BidDetails/>
       
        </div>

        </div>

        
  

    )
}

export default Home;
