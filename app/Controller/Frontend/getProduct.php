<?php 
    include '../../../app/Model/conection.php';
    function getAllProductForFront(){
        global $con;
                        $select_product="SELECT * FROM `tbproducts`";
                        $rs=$con->query($select_product);
                        if($rs->num_rows>0){
                            while($row=$rs->fetch_assoc()){
                                echo '
                                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow cursor-pointer ">
                                    <img src="../../../public/upload/'.$row['image'].'" alt="'.$row['product_name'].'" class="w-full h-[200px] object-cover">
                                    <div class="p-6">
                                        <h3 class="text-lg font-semibold mb-2">'.$row['product_name'].'</h3>
                                        <p class="text-gray-600 mb-4 text-sm" style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">'.$row['description'].'</p>
                                        <div class="flex items-center justify-between">
                                            <span class="text-2xl font-bold text-blue-600">$'.$row['price'].'</span>
                                            <div class="flex space-x-2">
                                                <button  class="bg-gray-100 hover:bg-gray-200 text-gray-800 px-3 py-2 rounded transition">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                                <button  
                                                        class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded transition ">
                                                    <i class="fas fa-cart-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                ';
                            }
                    }
    }
?>