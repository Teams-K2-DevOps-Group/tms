<h2>All Houses</h2>
  <table>
    <thead>
    <tr>
      <th>Title</th>
      <th>Location</th>
      <th>Price</th>
      <th>Description</th>
      <th>Image</th>
    </tr>
    </thead>
    <tbody>
    <tr th:each="house : ${houses}">
      <td th:text="${house.title}"></td>
      <td th:text="${house.location}"></td>
      <td th:text="'&#163;'+${house.price}"></td>
      <td th:text="${house.description}"></td>
      <td><img th:src="@{'/uploads/' + ${house.imageUrl}}" width="100" alt="House Image"/></td>
    </tr>
    </tbody>
  </table>