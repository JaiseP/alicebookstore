const renderAllOrders = () => {
    request = $.ajax({
        url: "../ajax/admin/orders/getAllOrders.php",
        type: "get",
    });

    request.done(function (response) {
        let orderRender = '';
        const res = JSON.parse(response);

        if(res.status == "success") {
            orders = res.orders;
            orders.forEach(order => {
                orderRender += `
                <tr data-toggle="modal" data-target="#orderDetailsModal">
                    <td>${order.order_id}</td>
                    <td>${order.billing_name}</td>
                    <td>${order.order_date}</td>
                    <td>${order.payment_mode == 1 ? 'Cash on Delivery' : 'Online Delivery'}</td>
                    <td>${order.order_status == 1 ? 'New Order' : order.order_status == 2 ? 'Processing' : order.order_status == 3 ? 'Completed' : 'Cancelled'}</td>
                </tr>
            `;
            });
            $("#all-orders").html(orderRender);
        } else {
            console.log("Failed");
        }
    });
}


renderAllOrders();