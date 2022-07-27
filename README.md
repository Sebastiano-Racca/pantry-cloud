# Pantry-Cloud
Use this helper library to interact with the [Pantry](https://getpantry.cloud) JSON storage API. The documentation for the Pantry API can be found [here](https://documenter.getpostman.com/view/3281832/SzmZeMLC).

## Installing
1. Clone this repostory and include the [pantry.php](https://github.com/sebaOfficial/pantry-cloud/blob/main/pantry.php) file or just copy that file
2. Replace [YOUR_PANTRY_ID](https://github.com/sebaOfficial/pantry-cloud/blob/main/pantry.php#L3) with your pantry id
3. Enjoy

## Functions & Usage
`get_pantry`
> Returns the details of the pantry, including a list of baskets currently stored inside it.<br>
Usage: `get_pantry();`

`update_pantry`
> Updates the details of the pantry.<br>
Usage: `update_pantry();`

`create_basket`
> This will either create a new basket inside your pantry, or replace an existing one.<br>
Usage: `create_basket("YOUR_BASKET_NAME");`

`get_basket`
> Return the full contents of the basket.<br>
Usage: `get_basket("YOUR_BASKET_NAME");`

`revrite_basket`
> This will revrite the existing contents and return the contents of the newly updated basket.<br>
Usage: `revrite_basket("YOUR_BASKET_NAME", ["ARRAY_DATA"]);`

`update_basket`
> This will update the existing contents and return the contents of the newly updated basket. This operation performs a deep merge and will overwrite the values of any existing keys, or append values to nested objects or arrays.<br>
Usage: `update_basket("YOUR_BASKET_NAME", ["ARRAY_DATA"]);`

`delete_basket`
> Delete the entire basket. Warning, this action cannot be undone.<br>
Usage: `revrite_basket("YOUR_BASKET_NAME");`

You can find a very basic example [here](https://github.com/sebaOfficial/pantry-cloud/blob/main/basic-example.php) and a simple example [here](https://github.com/sebaOfficial/pantry-cloud/blob/main/webpage-example.php).<br>
To better understand the calls these functions make, read through the [Pantry API Documentation](https://documenter.getpostman.com/view/3281832/SzmZeMLC) as well.

## Credits
- [Creator of this repostory](https://github.com/sebaOfficial)
- [Creator of Pantry](https://github.com/imRohan)
