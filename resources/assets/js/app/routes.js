import auth from './auth/routes'
import home from './home/routes'
import timeline from './timeline/routes'
import polla from './polla/routes'
import errors from './errors/routes'

export default [...home, ...auth, ...timeline, ...polla, ...errors]