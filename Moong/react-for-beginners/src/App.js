import { useState, useEffect } from "react";

function App() {
  const [Loading, setLoading] = useState(true);
  const [Coins, setCoins] = useState([]);

  useEffect(() => {
    fetch("https://api.coinpaprika.com/v1/tickers").then((response) =>
      response.json().then((json) => {
        setCoins(json);
        setLoading(false);
      })
    );

    // return () => {
    //   second
    // }
  }, []);

  return (
    <div>
      <h1>The Coins! {Loading ? "" : `(${Coins.length})`}</h1>
      {Loading ? (
        <strong>Loadings...</strong>
      ) : (
        <select>
          {Coins.map((coin) => (
            <option>
              {coin.name} ({coin.symbol}) : {coin.quotes.USD.price} USD
            </option>
          ))}
        </select>
      )}
    </div>
  );
}

export default App;
