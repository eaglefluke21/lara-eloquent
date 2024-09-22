import React from 'react';


import {
  Sheet,
  SheetContent,
  SheetDescription,
  SheetHeader,
  SheetTitle,
  SheetTrigger,
} from "@/components/ui/sheet"

import { Button } from "@/components/ui/button"




const BidDetails = () => {


 const data = {
    "id": 54,
    "item_id": 3,
    "user_id": 'Clive', //325
    "bid_amount": "3000.00",
    "anonymous_user": 0,
    "winning_bid_status": 1,
    "winning_email_status": 1,
    "status": "Online", //1
    "created_by": 325,
    "created": "2023-06-05 12:43:34",
    "updated": "2023-06-05 18:13:34",
    "itemId": 3,
    "itemName": "Analog Black Dial Men Watch-TW000R438",
    "itemEndDate": "2023-09-01 06:59:00",
    "bid_increments": 20,
    "itemQuantity": 1,
    "itemStatus": 1,
    "paymentMode": 'PayU', //1
    "itemImage": "https://images.unsplash.com/photo-1615368144592-44708889c926?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3DU",
    "auctionId": 1,
    "auctionStatus": 1,
    "auctionSlug": "first-auction",
    "auctionName": "first auction",
    "timezone": "America\/Los_Angeles"
}


  return (

<div className="flex flex-col  items-center justify-center ">


<Sheet>
  <SheetTrigger className=" text-outline-pink border-2 border-outline-pink px-2 py-2 rounded-md font-quick font-medium sm:font-semibold" variant="outline">
    
  {data.itemName}

    </SheetTrigger>
    <SheetContent className="sm:max-w-xl sm:w-[35rem] bg-custom-gray border-custom-gray">
    <SheetHeader className="my-6">
      <SheetTitle > </SheetTitle>
      <div className="flex flex-col  items-center justify-center gap-4 ">

      <img src={data.itemImage} className='rounded-md'  />

      <div className="flex flex-col gap-2 mb-4">
      <p className=" font-quick text-main-pink font-medium text-sm sm:text-xl"> {data.itemName} </p>

      <p className="font-quick font-bold text-custom-blue text-sm sm:text-lg  "> <span className='font-medium text-white'> By </span>  {data.auctionName}</p>
      </div>


      <div className="flex flex-col sm:grid sm:grid-cols-2 gap-2 w-64 sm:w-full">

      <Button className="flex flex-row justify-between text-sm sm:text-md font-quick text-data-green font-semibold bg-data-gray-hover sm:bg-data-gray sm:hover:bg-data-gray-hover w-full rounded-full"><span>#User </span> <span className="bg-white text-black px-2 rounded-full">{data.user_id}</span></Button>


      <Button className="flex flex-row justify-between text-sm sm:text-md font-quick text-data-rose font-semibold bg-data-gray-hover sm:bg-data-gray sm:hover:bg-data-gray-hover w-full rounded-full"><span>#Bid Amount </span> <span className="bg-white text-black px-2 rounded-full">${data.bid_amount}</span></Button>

      <Button className="flex flex-row justify-between text-sm sm:text-md font-quick text-custom-blue font-semibold bg-data-gray-hover sm:bg-data-gray sm:hover:bg-data-gray-hover w-full rounded-full"><span>#Status </span> <span className="bg-white text-black px-2 rounded-full">{data.status}</span></Button>

      <Button className="flex flex-row justify-between text-sm sm:text-md font-quick text-data-yellow font-semibold bg-data-gray-hover sm:bg-data-gray sm:hover:bg-data-gray-hover w-full rounded-full"><span>#Payment Mode </span> <span className="bg-white text-black px-2 rounded-full">{data.paymentMode}</span></Button>
     

      </div>

      


      </div>
    </SheetHeader>
  </SheetContent>
</Sheet>







    </div>
  );
};

export default BidDetails;
